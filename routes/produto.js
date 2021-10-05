const express = require('express');
const router = express.Router();
const mysql = require('../mysql').pool;

router.get('/',(req,res,next)=>{
    mysql.getConnection((error,conn)=>{
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






module.exports = router;