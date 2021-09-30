const express = require('express');
const router = express.Router();
const mysql = require('../mysql').pool;

router.get('/',(req,res,next)=>{
    mysql.getConnection((error,conn)=>{
        conn.query(
            'SELECT * FROM clientes',
            [req.body.id_cliente,req.body.nome_cliente,req.body.telefone,req.body.cpf_cnpj,req.body.cep,req.body.num_end,req.body.email],
            (error,resultado,fields)=>{
                conn.release();
                if (error) {
                    res.status(500).send({
                        error:error,
                        Response:null
                    })
                }
                res.status(200).send({
                    mensagem:'listar todos clientes',
                    id_cliente:resultado
                });
            }
        )
    })
});

router.post('/',(req,res,next)=>{

    mysql.getConnection((error, conn)=>{
        conn.query(
            'INSERT INTO clientes (id_cliente, nome_cliente, telefone, cpf_cnpj, cep, num_end, email) VALUES(?,?,?,?,?,?,?)',
            [req.body.id_cliente,req.body.nome_cliente,req.body.telefone,req.body.cpf_cnpj,req.body.cep,req.body.num_end,req.body.email],
            (error,resultado,fields)=>{
                conn.release();
                if(error){
                    res.status(500).send({
                        error:error,
                        Response:null
                    })
                }
                res.status(201).send({
                    mensagem:'cliente cadastrado com sucesso',
                    id_cliente:resultado.insertId
                });
            }
        )
    })
});

router.get('/:id_usuario',(req,res,next)=>{
    const id = req.params.id_usuario
    res.status(200).send({
        mensagem:'buscando cliente por ID',
        id:id
    });
});
router.delete('/:id_usuario',(req,res,next)=>{
    const id = req.params.id_usuario
    res.status(200).send({
        mensagem:'deletando cliente por ID',
        id:id
    });
});
router.put('/:id_usuario',(req,res,next)=>{
    const id = req.params.id_usuario
    res.status(200).send({
        mensagem:'incluindo cliente por ID',
        id:id
    });
});
module.exports = router;