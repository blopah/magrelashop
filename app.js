const express = require('express');
const app = express();
const morgan = require('morgan');
const bodyParser = require('body-parser');
const rotaClientes = require('./routes/clientes');
const rotaenderecosfuncionario = require('./routes/enderecosfuncionario');
const rotafornecedor = require('./routes/fornecedor');
const rotaitemPedidos = require('./routes/itemPedidos');
const rotaPedidos = require('./routes/pedidos');
const rotaservico = require ('./routes/servico');
const rotaproduto = require ('./routes/produto');


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
app.use('/enderecosfuncionario', rotaenderecosfuncionario);
app.use('/fornecedor', rotafornecedor);
app.use('/itemPedidos', rotaitemPedidos);
app.use('/pedidos',rotaPedidos);
app.use('/servico', rotaservico);
app.use('/produto', rotaproduto);

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