const express = require('express');
const router = express.Router();
const mysql = require('../mysql').pool;

router.get('/',(req,res,next)=>{
    mysql.getConnection((error,conn)=>{
        if (error) {return res.status(500).send({error:error}) }
        conn.query(
            `SELECT * FROM servico`,
            [req.body.id_serv, 
                req.body.id_funcionario, 
                req.body.cep, req.body.cpf,
                req.body.tipo_servico,
                req.body.id_pedido,
                req.body.valor_serv],
                (error,resultado,fields)=>{
                    conn.release();
                    if (error) {
                        res.status(500).send({
                            error:error,
                            Response:null
                        })
                    }
                    res.status(200).send({
                        mensagem:'usando o get na rota serviços',
                        id_serv:resultado
                    });
                }
        )
    })
});
router.get('/:id_serv', (req,res,next)=>{
    mysql.getConnection((error, conn)=>{
        if (error) {return res.status(500).send({error:error}) }
        conn.query(
            'SELECT*FROM servico WHERE id_serv =?;',
            [req.params.id_serv],
            (error, resultado, fields)=>{
                conn.release();
                if (error) {
                    res.status(500).send({
                        error:error,
                        Response:null
                    })
                }
                res.status(200).send({
                    mensagem:'buscando serviço por ID',
                    id_serv:resultado
                });
            }
        )
    })
})
router.post('/',(req,res,next)=>{
    mysql.getConnection((error,conn)=>{
        if (error) {return res.status(500).send({error:error}) }
        conn.query(
            'INSERT INTO servico(id_serv, id_funcionario, cep, cpf, tipo_servico, id_pedido,valor_serv)VALUE(?,?,?,?,?,?,?)',
            [req.body.id_serv, req.body.id_funcionario,req.body.cep,req.body.cpf,req.body.tipo_servico,req.body.id_pedido,req.body.valor_serv],
            (error,resultado,fields)=>{
               conn.release();
               if (error) {
                   res.status(500).send({
                       error:error,
                       Response:null
                   })
               }     
               res.status(201).send({
                mensagem:'pedido criado com sucesso',
                id_serv:resultado
            });
            }
        )
    })
});
router.delete('/',(req,res,next)=>{
   mysql.getConnection((error,conn)=>{
    if (error) {return res.status(500).send({error:error}) }
       conn.query(
           'DELETE FROM servico WHERE id_serv= ?;',
           [req.body.id_serv],
           (error,resultado,fields)=>{
               conn.release();
               if (error) {
                   res.status(500).send({
                       error:error,
                       Response:null
                   })
               }
               res.status(200).send({
                mensagem:'deletando  na rota serviços por ID',
                id_serv:resultado
            });
           }
       )
   })
});
router.put('/:id_usuario',(req,res,next)=>{
    mysql.getConnection((error,conn)=>{
        if (error) {return res.status(500).send({error:error}) }
        conn.query(
            `UPDATE servico 
            SET id_serv
            id_funcionario=?,
            cep=?,
            cpf=?,
            tipo_servico=?,
            id_pedido=?,
            valor_serv
            WHERE id_serv=?;`,
            [req.body.id_serv,
            req.body.id_funcionario,
            req.body.cep,
            req.body.cpf,
            req.body.tipo_servico,
            req.body.id_pedido,
            req.body.valor_serv],
             (error,resultado,fields)=>{
                 conn.release();
                 if(error){
                     res.status(500).send({
                         error:error,
                         Response:null
                     })
                 }
                 res.status(201).send({
                     mensagem:'servico modificado com sucesso',
                     id_produto:resultado
                 });
             }
        )
    })
});
module.exports = router;