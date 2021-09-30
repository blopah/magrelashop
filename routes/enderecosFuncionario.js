const express = require('express');
const router = express.Router();
const mysql = require('../mysql').pool;

router.get('/',(req,res,next)=>{
    mysql.getConnection((error,conn)=>{
        conn.query(
            'SELECT * FROM '
        )
    })
    res.status(200).send({
        mensagem:'usando o get na rota de endereções'
    });
});
router.get('/:id_serv',(req,res,next)=>{

    res.status(200).send({
        mensagem:'usando o get na rota de endereções'
    });
});
router.post('/:id_usuario',(req,res,next)=>{
    const id = req.params.id_usuario
    res.status(201).send({
        mensagem:'usando o post na rota de endereços de funcionarios',
        id:id
    });
});
router.delete('/:id_usuario',(req,res,next)=>{
    const id = req.params.id_usuario
    res.status(200).send({
        mensagem:'deletando endereço de funcionario por ID',
        id:id
    });
});
router.put('/:id_usuario',(req,res,next)=>{
    const id = req.params.id_usuario
    res.status(200).send({
        mensagem:'incluindo endereço de funcionario por ID',
        id:id
    });
});
module.exports = router;