import React from 'react';
import './App.css';

import Header from './components/header'
import Footer from './components/footer'
import Form from './pages/form'
import Lista from './pages/lista'

const App = () => {
  return (
    <div className="App">
      <Header />
      <Form />
      <Lista />
      <Footer />
    </div>
  );
}

export default App;
