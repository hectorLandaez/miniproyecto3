import React, { useState } from "react";
import "./App.css"; 
import { Button } from "primereact/button";
import "primeicons/primeicons.css";
import Login from "./componets/Login";
import PersonalInfo from "./componets/PersonalInfo";

function App() {
  const [temaDark, setTemaDark] = useState(false);

  const cambiarTema = (e) => {
    e.preventDefault()
    if (temaDark) {
      import("primereact/resources/themes/bootstrap4-light-blue/theme.css");
      setTemaDark(false);
      console.log(temaDark)
    } else {
      import("primereact/resources/themes/bootstrap4-dark-blue/theme.css");
      setTemaDark(true);
      console.log(temaDark)
    }
  };

  return (
    <>
      <form onSubmit={cambiarTema}>
     <Button label="mode" type="submit"/>
     </form> 
    <Login></Login>
    <PersonalInfo></PersonalInfo>
    
    </>
  );
}

export default App;
