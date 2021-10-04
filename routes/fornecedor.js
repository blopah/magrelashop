const express = require('express');
const router = express.Router();
const mysql = require('../mysql').pool;


router.get('/',(req,res,next)=>{
    mysql.getConnection((error,conn)=>{
        conn.query(
            'SELECT * FROM fornecedor',
            [req.body.id_fornecedor, req.body.nome, req.body.num_end, req.body.cep,req.body.telefone,req.body.cnpj],
            (error,resultado,fields)=>{
                conn.release();
                if (error) {
                    res.status(500).send({
                        error:error,
                        Response:null
                    })
                }
                res.status(200).send({
                    mensagem:'listar todos fornecedores',
                    id_fornecedor:resultado
                });
            }
        )
    })
});
router.get('/:id_fornecedor',(req,res,next)=>{
    mysql.getConnection((error,conn)=>{
        conn.query(
            'SELECT * FROM fornecedor WHERE id_fornecedor =?;',
            [req.params.id_fornecedor],
            (error,resultado,fields)=>{
                conn.release();
                if (error) {
                    res.status(500).send({
                        error:error,
                        Response:null
                    })
                }
                res.status(200).send({
                    mensagem:'listar todos fornecedores',
                    id_fornecedor:resultado
                });
            }
        )
    })
});
router.post('/',(req,res,next)=>{
    mysql.getConnection((error,conn)=>{
        conn.query(
            'INSERT INTO fornecedor (id_fornecedor, nome, num_end, cep, telefone, cnpj)VALUES(?,?,?,?,?,?)',
            [req.body.id_fornecedor, req.body.nome, req.body.num_end, req.body.cep, req.body.telefone, req.body.cnpj],
            (error,resultado,fields)=>{
                conn.release();
                if (error) {
                    res.status(500).send({
                        error:error,
                        Response:null
                    })
                }
                res.status(200).send({
                    mensagem:'fornecedor cadastrado com sucesso',
                    id_fornecedor:resultado
                });
            }
        )
    })
});
router.delete('/:id_usuario',(req,res,next)=>{
    const id = req.params.id_usuario
    res.status(200).send({
        mensagem:'deletando rota rota fornecedor ID',
        id:id
    });
});
router.put('/:id_usuario',(req,res,next)=>{
    const id = req.params.id_usuario
    res.status(200).send({
        mensagem:'incluindo na rota fornecedor ID',
        id:id
    });
});
module.exports = router;