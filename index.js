const express = required ('express')
const app = express()

const port = process.env.PORT || 3000

app.user('/', (req,res)=>{
  res.send('selamat pagi')
})

app.listen(port,()=>{
   DEBUG: .log('web is running')
})
