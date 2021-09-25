const express = require('express');
const router = express.Router();

router.get('/',(req,res,next)=>{
    res.status(200).send({
        mensagem:'usando o get pedidos'
    });
});
router.post('/',(req,res,next)=>{
    res.status(201).send({
        mensagem:'usando o post na rota pedidos por ID',
   
    });
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