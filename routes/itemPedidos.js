const express = require('express');
const router = express.Router();

router.get('/',(req,res,next)=>{
    mysql.getConnection((error,conn)=>{
        if (error) {return res.status(500).send({error:error}) }
        conn.query(
            'SELECT * FROM item_pedidos',
           [req.body.preco,
            req.body.descricao,
            req.body.id_produto,
            req.body.id_pedido,
            req.body.pedidos_id_pedido],
            (error,resultado,fields)=>{
                conn.release();
                if (error) {
                    res.status(500).send({
                        error:error,
                        Response:null
                    })
                }
                res.status(200).send({
                    mensagem:'listar todos os pordutos',
                    id_cliente:resultado
                });
            }
        )
    })
});
router.get('/:id_pedido',(req,res,next)=>{
    mysql.getConnection((error,conn)=>{
        if (error) {return res.status(500).send({error:error}) }
        conn.query(
            'SELECT * FROM item_pedidos WHERE id_pedido=?;',
           [req.body.id_pedido],
            (error,resultado,fields)=>{
                conn.release();
                if (error) {
                    res.status(500).send({
                        error:error,
                        Response:null
                    })
                }
                res.status(200).send({
                    mensagem:'produtos por ID',
                    id_pedido:resultado
                });
            }
        )
    })
});

router.post('/',(req,res,next)=>{
    mysql.getConnection((error,conn)=>{
        if (error) {return res.status(500).send({error:error}) }
        conn.query(
            'INSERT INTO item_pedido (preco, descricao, id_produto, id_pedido,pedidos_id_pedido,)VALUES(?,?,?,?,?)',
            [req.body.preco, req.body.descricao, req.body.id_produto, req.body.id_pedido, req.body.pedidos_id_pedido],
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
router.delete('/:item_pedidos',(req,res,next)=>{
    mysql.getConnection((error,conn)=>{
        if (error) {return res.status(500).send({error:error}) }
        conn.query(
            'DELETE FROM item_pedidos WHERE id_pedido=?;',
           [req.body.id_pedido],
            (error,resultado,fields)=>{
                conn.release();
                if (error) {
                    res.status(500).send({
                        error:error,
                        Response:null
                    })
                }
                res.status(200).send({
                    mensagem:'deletando produtos por ID',
                    id_pedido:resultado
                });
            }
        )
    })
});
router.put('/:id_usuario',(req,res,next)=>{
    const id = req.params.id_usuario
    res.status(200).send({
        mensagem:'incluindo  na rota itemPedido por ID',
        id:id
    });
});
module.exports = router;