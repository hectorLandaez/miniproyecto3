import { InputText } from "primereact/inputtext";
import { Button } from "primereact/button";

function Login () {
return(
    <div className="fBox">
    <span className="p-input-icon-left">
      <i className="pi pi-ticket" />
      <InputText placeholder="email" />
    </span>

    <span className="p-input-icon-left">
      <i className="pi pi-shield" />
      <InputText placeholder="password" />
    </span>
    <Button label="Start coding now" />
  </div> 
)
}

export  default Login