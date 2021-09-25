const express = require('express');
const app = express();

const rotaClientes = require('./routes/clientes');
const rotaEnderecosFuncionarios = require('./routes/enderecosFuncionario');
const rotafolhaPagamento = require ('./routes/folhaPagamento');
const rotafornecedor = require('./routes/fornecedor');
const rotaitemPedidos = require('./routes/itemPedidos');
const rotaPedidos = require('./routes/pedidos');
const rotaprodutoMontado = require('./routes/produtoMontado');
const rotaservico = require ('./routes/servico');
const rotaverbas = require ('./routes/verbas');

app.use('/clientes', rotaClientes);
app.use('/enderecosFuncionarios', rotaEnderecosFuncionarios);
app.use('/folhaPagamento',rotafolhaPagamento);
app.use('/fornecedor', rotafornecedor);
app.use('/itemPedidos', rotaitemPedidos);
app.use('/pedidos',rotaPedidos);
app.use('/produtoMontado', rotaprodutoMontado);
app.use('/servico', rotaservico);
app.use('/verbas', rotaverbas);
module.exports=app;