import React, { useState } from 'react'
import api from '../services/api'

import './form.css'

const Form = () => {

  const [nome, setNome]= useState('')
  const [email, setEmail]= useState('')
  const [data_nascimento, setData_nascimento]= useState('')
  const [telefone, setTelefone]= useState('')

  function salvarCadastro() {
    api.post('/cadastros',
      {nome, email, data_nascimento, telefone}
    ).then(()=>{
      document.location.reload()
    })
  }

  return (
    <div className="form" id="form">
      <span className="titulo">CADASTRO</span>
      <form>
        <div className="form-group">
          <label htmlFor="nome">Nome</label>
          <input type="text"
            id="nome"
            value={nome}
            onChange={event => setNome(event.target.value)}
            />
        </div>
        <div className="form-group">
          <label htmlFor="email">Email</label>
          <input type="text"
          id="email"
          value={email}
          onChange={event => setEmail(event.target.value)}
          />
        </div>
        <div className="form-group">
          <label htmlFor="data_nascimento">Nascimento</label>
          <input type="date"
          id="data_nascimento"
          value={data_nascimento}
          onChange={event => setData_nascimento(event.target.value)}
          />
        </div>
        <div className="form-group">
          <label htmlFor="telefone">Telefone</label>
          <input type="text"
          id="telefone"
          value={telefone}
          onChange={event => setTelefone(event.target.value)}
          />
        </div>
        <div className="form-group">
          <button type="button"
            className="btn"
            onClick={()=>{salvarCadastro()}}
            >CADASTRAR</button>
        </div>
      </form>
    </div>
  )
}

export default Form
