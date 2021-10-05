const express = require('express');
const router = express.Router();
const mysql = require('../mysql').pool;

router.get('/',(req,res,next)=>{
    mysql.getConnection((error,conn)=>{
        if (error) {return res.status(500).send({error:error}) }
        conn.query(
            'SELECT * FROM produto',
            [req.body.id_fornecedor, req.body.id_produto, req.body.descricao, req.body.preco, req.body.categoria, req.body.quantidade, req.body.fornecedor_id_fornecedor],
            (error,resultado,fields)=>{
                conn.release();
                if (error) {
                    res.status(500).send({
                        error:error,
                        Response:null
                    })
                }
                res.status(200).send({
                    mensagem:'listar todos produtos',
                    id_produto:resultado
                });
            }
        )
    })
});
router.get('/:id_produto',(req,res,next)=>{
    mysql.getConnection((error,conn)=>{
        if (error) {return res.status(500).send({error:error}) }
        conn.query(
            'SELECT * FROM produto WHERE id_produto =?;',
            [req.params.id_produto],
            (error,resultado,fields)=>{
                conn.release();
                if (error) {
                    res.status(500).send({
                        error:error,
                        Response:null
                    })
                }
                res.status(200).send({
                    mensagem:'tem mais ta faltando ID',
                    id_produto:resultado
                });
            }
        )
    })
});
router.post('/',(req,res,next)=>{
    mysql.getConnection((error,conn)=>{
        if (error) {return res.status(500).send({error:error}) }
        conn.query(
            '',
            [req.body.id_fornecedor,req.body.id_produto,req.body.descricao,req.body.preco,req.body.categoria,req.body.quantidade,req.body.fornecedor_id_fornecedor],
            (error,resultado,fields)=>{
                conn.release();
                if (error) {
                    res.status(500).send({
                        error:error,
                        Response:null
                    })
                }
                res.status(201).send({
                    mensagem:'Produto criado com sucesso',
                    id_produto:resultado
                })
            }
        )
    })
});
router.delete('/', (req,res,next)=>{
        mysql.getConnection((error,conn)=>{
            if (error) {return res.status(500).send({error:error}) }
            conn.query(
            '',
            [req.body.id_produto],
            (error,resultado,fields)=>{
                conn.release();
                    if (error) {
                        res.status(500).send({
                        error:error,
                        Response:null   
                    })
                }
                res.status(200).send({
                mensagem:'produto deletando com sucesso por ID',
                    id_cliente:resultado
                 })
            }
        )
    })
})
router.put('/',(req,res,next)=>{
    mysql.getConnection((error,conn)=>{
        if (error) {return res.status(500).send({error:error}) }
        conn.query(
            '',
            [req.body.id_fornecedor,req.body.id_produto,req.body.descricao,req.body.preco,req.body.categoria,req.body.quantidade,req.body.fornecedor_id_fornecedor],
             (error,resultado,fields)=>{
                 conn.release();
                 if(error){
                     res.status(500).send({
                         error:error,
                         Response:null
                     })
                 }
                 res.status(201).send({
                     mensagem:'produto modificado com sucesso',
                     id_produto:resultado
                 });
             }
        )
    })
});

module.exports = router;