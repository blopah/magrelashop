const express = require('express');
const router = express.Router();

router.get('/',(req,res,next)=>{
    res.status(200).send({
        mensagem:'usando o get na rota verbas'
    });
});
router.post('/:id_usuario',(req,res,next)=>{
    const id = req.params.id_usuario
    res.status(201).send({
        mensagem:'usando o post na rota verbas por ID',
        id:id
    });
});
router.delete('/:id_usuario',(req,res,next)=>{
    const id = req.params.id_usuario
    res.status(200).send({
        mensagem:'deletando  na rota verbas por ID',
        id:id
    });
});
router.put('/:id_usuario',(req,res,next)=>{
    const id = req.params.id_usuario
    res.status(200).send({
        mensagem:'incluindo  na rota verbas por ID',
        id:id
    });
});
module.exports = router;