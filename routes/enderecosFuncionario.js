const express = require('express');
const router = express.Router();
const mysql = require('../mysql').pool;

router.get('/',(req,res,next)=>{
    mysql.getConnection((error,conn)=>{
        if (error) {return res.status(500).send({error:error}) }
        conn.query(
            'SELECT * FROM enderecos_funcionario',
            [req.body],
            (error,resultado,fields)=>{
                conn.release();
                if (error) {
                    res.status(500).send({
                        error:error,
                        Response:null
                    })
                }
                res.status(200).send({
                    mensagem:'usando o get na rota de endereções',
                    id_funcionario:resultado
                });
            }
        )
    })
});
router.get('/:id_funcionario',(req,res,next)=>{
    mysql.getConnection((error,conn)=>{
        if (error) {return res.status(500).send({error:error}) }
        conn.query(
            'SELECT * FROM enderecos_funcionario WHERE id_funcionario=?;',
            [req.body.id_funcionario],
            (error,resultado,fields)=>{
                conn.release();
                if (error) {
                    res.status(500).send({
                        error:error,
                        Response:null
                    })
                }
                res.status(200).send({
                    mensagem:'tem mais ta faltando endereções',
                    id_funcionario:resultado
                });
            }
        )
    })
});
router.post('/',(req,res,next)=>{
mysql.getConnection((error, conn)=>{
    if (error) {return res.status(500).send({error:error}) }
    conn.query(
        '',
        [req.body],
        (error,resultado,fields)=>{
            conn.release();
            if (error) {
                res.status(500).send({
                    error:error,
                    Response:null
                })
            }
            res.status(201).send({
                mensagem:'usando o post na rota de endereços de funcionarios',
                id_funcionario:resultado
            });
        }
    )
})
});
router.delete('/:id_funcionario',(req,res,next)=>{
    mysql.getConnection((error,conn)=>{
        if (error) {return res.status(500).send({error:error}) }
        conn.query(
            'SELECT * FROM produto',
            [req.body.id_funcionario],
            (error,resultado,fields)=>{
                conn.release();
                if (error) {
                    res.status(500).send({
                        error:error,
                        Response:null
                    })
                }
                res.status(200).send({
                    mensagem:'deletando tem mais ta faltando endereções',
                    id_funcionario:resultado
                });
            }
        )
    })
});
router.put('/:id_funcionario',(req,res,next)=>{
    mysql.getConnection((error,conn)=>{
        if (error) {return res.status(500).send({error:error}) }
        conn.query(
            `UPDATE enderecos_funcionarios 
            SET id_funcionario
            cidade=?, 
            uf=?,
            bairro=?, 
            logradouro=?, 
            cep=?,
            telefone=?,
            id_funcionario=?,
            nome=?,
            funcao=?,
            salario=?,
            cpf=?,
            WHERE id_funcionario=?;`,
            [req.body.id_funcionario, 
            req.body.cidade,
            req.body.uf,
            req.body.bairro,
            req.body.logradouro, 
            req.body.cep,
            req.body.telefone,
            req.body.id_funcionario,
            req.body.nome,
            req.body.funcao,
            req.body.salario,
            req.body.cpf],
             (error,resultado,fields)=>{
                 conn.release();
                 if(error){
                     res.status(500).send({
                         error:error,
                         Response:null
                     })
                 }
                 res.status(201).send({
                     mensagem:'funcionario modificado com sucesso',
                     id_produto:resultado
                 });
             }
        )
    })
 });
module.exports = router;