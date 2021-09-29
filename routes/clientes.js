const express = require('express');
const router = express.Router();

router.get('/',(req,res,next)=>{
    res.status(200).send({
        mensagem:'usando o get na rota de clientes'
    });
});

router.post('/',(req,res,next)=>{
    const cliente ={
        id_cliente: req.body.id_cliente,
        nome_cliente: req.body.nome_cliente,
        telefone: req.body.telefone, 
        cpf_cnpj:req.body.cpf_cnpj,
        cep:req.body.cep,
        Num_end:req.body,
        e_mail:req.body.e_mail
    }
    res.status(201).send({
        mensagem:'Insere um cliente',
        clienteCriado:cliente
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