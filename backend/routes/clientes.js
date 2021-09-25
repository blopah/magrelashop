const express = require('express');
const router = express.Router();

router.get('/',(req,res,next)=>{
    res.status(200).send({
        mensagem:'usando o get na rota de clientes'
    });
});

router.post('/:id_usuario',(req,res,next)=>{
    const id = req.params.id_usuario
    res.status(201).send({
        mensagem:'usando o post na rota de clientes',
        id:id
    });
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