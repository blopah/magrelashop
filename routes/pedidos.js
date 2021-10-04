const express = require('express');
const router = express.Router();
const mysql = require('../mysql').pool;


router.get('/',(req,res,next)=>{
    mysql.getConnection((error, conn)=>{
        conn.query(
            'SELECT * FROM pedidos',
            [req.body.id_pedido, req.body.id_cliente, req.body.valor_pagto, req.body.id_funcionario, req.body.id_serv, req.body.quantidade, req.body.cpf_cnpj, req.body.produto_id_produto, req.body.clientes_id_cliente, req.body.servico_id_serv, req.body.enderecos_funcionario_id_funcionario],
            (error,resultado,fields)=>{
                conn.release();
                if (error) {
                    res.status(500).send({
                        error:error,
                        Response:null
                    })
                }
                res.status(200).send({
                    mensagem:'listar todos os pedidos',
                    id_pedido:resultado
                });
            }    
        )
    })
});

router.get('/:id_pedido',(req,res,next)=>{
    mysql.getConnection((error, conn)=>{
        conn.query(
            'SELECT * FROM pedidos WHERE id_pedido =?;',
            [req.body.id_pedido, req.body.id_cliente, req.body.valor_pagto, req.body.id_funcionario, req.body.id_serv, req.body.quantidade, req.body.cpf_cnpj, req.body.produto_id_produto, req.body.clientes_id_cliente, req.body.servico_id_serv, req.body.enderecos_funcionario_id_funcionario],
            (error,resultado,fields)=>{
                conn.release();
                if (error) {
                    res.status(500).send({
                        error:error,
                        Response:null
                    })
                }
                res.status(200).send({
                    mensagem:'listar todos os pedidos por id',
                    id_pedido:resultado
                });
            }    
        )
    })
});
router.post('/',(req,res,next)=>{
mysql.getConnection((error, conn)=>{
    conn.query(
        '',
        [],
        (error,resultado,fields)=>{
            conn.release();
            if (error) {
                res.status(500).send({
                    error:error,
                    Response:null
                })
            }
        }
    )
})
     res.status(201).send({
           mensagem:'o pedido foi criado' ,
           pedidoCriado:pedidos
        })
});
router.post('/:id_usuario',(req,res,next)=>{
    const id = req.params.id_usuario
    res.status(201).send({
        mensagem:'usando o post na rota pedidos por ID',
        id:id
    });
});
router.delete('/:id_usuario',(req,res,next)=>{
    const id = req.params.id_usuario
    res.status(200).send({
        mensagem:'deletando  na rota pedidos por ID',
        id:id
    });
});
router.delete('/',(req,res,next)=>{
    const id = req.params.id_usuario
    res.status(200).send({
        mensagem:'deletando  na rota pedidos sem ID',
        id:id
    });
});
router.put('/:id_usuario',(req,res,next)=>{
    const id = req.params.id_usuario
    res.status(200).send({
        mensagem:'incluindo  na rota pedidos por ID',
        id:id
    });
});
module.exports = router;