const express = require('express')
const mongoose = require('mongoose')
const path = require('path')
const port = 3091

const app = express();
app.use(express.static(__dirname))

app.get('/',(req,res)=>{
    res.sendFile(path.join(__dirname,'index.html'))
})

app.listen(port,()=>{
    console.log("Server started")
})