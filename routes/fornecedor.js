const express = require('express');
const router = express.Router();
const mysql = require('../mysql').pool;


router.get('/',(req,res,next)=>{
    mysql.getConnection((error,conn)=>{
        if (error) {return res.status(500).send({error:error}) }
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
        if (error) {return res.status(500).send({error:error}) }
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
        if (error) {return res.status(500).send({error:error}) }
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
router.delete('/:id_fornecedor',(req,res,next)=>{
   mysql.getConnection((error,conn)=>{
    if (error) {return res.status(500).send({error:error}) }
       conn.query(
           'DELETE FROM fornecedor WHERE id_fornecedor=?;',
           [req.body.id_fornecedor],
           (error,resultado,fields)=>{
               conn.release();
               if (error) {
                   res.satatus(500).send({
                        error:error,
                        Response: null
                   })
               }       
        res.status(200).send({
        mensagem:'Fornecedor deletado com sucesso',
        id_fornecedor:resultado
            });
           }
       )
   })
});
router.put('/',(req,res,next)=>{
    mysql.getConnection((error,conn)=>{
        if (error) {return res.status(500).send({error:error}) }
        conn.query(
            'UPDATE fornecedor SET nome = ?, num_end =?, cep =?, telefone=?, cnpj=?, WHERE id_fornecedor=?',
            [req.body.nome,req.body.num_end,req.body.cep,req.body.telefone,req.body.cnpj,req.body.id_fornecedor],
            (error,resultado,fields)=>{
                conn.release();
                if (error) {
                    res.status(500).send({
                        error:error,
                        Response:null
                    })
                }
            res.status(200).send({
            mensagem:'Fornecedor modificado com sucesso',
            id_fornecedor:resultado
                });
            }
        )
    })
});
module.exports = router;