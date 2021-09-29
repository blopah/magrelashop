const express = require('express');
const app = express();
const morgan = require('morgan');
const bodyParser = require('body-parser');
const rotaClientes = require('./routes/clientes');
const rotaEnderecosFuncionarios = require('./routes/enderecosFuncionario');
const rotafolhaPagamento = require ('./routes/folhaPagamento');
const rotafornecedor = require('./routes/fornecedor');
const rotaitemPedidos = require('./routes/itemPedidos');
const rotaPedidos = require('./routes/pedidos');
const rotaprodutoMontado = require('./routes/produtoMontado');
const rotaservico = require ('./routes/servico');
const rotaverbas = require ('./routes/verbas');


app.use(morgan('dev'));
app.use(bodyParser.urlencoded({extended:false}));
app.use(bodyParser.json());

app.use((req, res, next) => {
    res.header('Access-Control-Allow-Origin', '*');
    res.header(
        'Access-Control-Allow-Header',
        'Origin, X-Requested-With, Content-Type, Accept, Authorization'
    );

    if (req.method === 'OPTIONS') {
        res.header('Access-Control-Allow-Methods', 'PUT, POST, PATCH, DELETE, GET');
        return res.status(200).send({});
    }
    next();
});


app.use('/clientes', rotaClientes);
app.use('/enderecosFuncionarios', rotaEnderecosFuncionarios);
app.use('/folhaPagamento',rotafolhaPagamento);
app.use('/fornecedor', rotafornecedor);
app.use('/itemPedidos', rotaitemPedidos);
app.use('/pedidos',rotaPedidos);
app.use('/produtoMontado', rotaprodutoMontado);
app.use('/servico', rotaservico);
app.use('/verbas', rotaverbas);

app.use((req,res, next)=>{
    const erro = new Error('Não encontrado');
    erro.status = 404;
    next(erro);
});

app.use((error, req, res, next)=>{
    res.status(error.status || 500);
    return res.send({
        error:{
            mensagem:error.message
        }
    });
    
});
module.exports=app;