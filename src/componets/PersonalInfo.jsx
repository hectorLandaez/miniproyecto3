import { InputText } from "primereact/inputtext";
import { Button } from "primereact/button";

function PersonalInfo(){
    return(
        <div className="second">
        <div className="personalInfoBox">
          <span className="fTitle">Personal info </span><span> Basic info like your name and photo </span>
        </div>
        <div className="info">
          
          <div className="divInfo">
            <div className="profileDiv"><span className="sTitle" >Profile</span> <span> Some info mya be visible to other people</span></div>
            <Button label="Edit" />
          </div>

          <div className="divInfo">
            <span className="divTitle">PHOTO</span>
            <div className="img"></div>
          </div>

          <div className="divInfo">
            <span className="divTitle">NAME</span>
            <span className=" divContent">HECTOR LANDAEZ</span>
          </div>

          <div className="divInfo">
            <span className="divTitle">BIO</span>
            <span className=" divContent">I am a software enginer</span>
          </div>
          <div className="divInfo">
            <span className="divTitle">EMAL</span>
            <span className=" divContent">1234@gmail.com</span>
          </div>

          <div className="divInfo">
            <span className="divTitle">PASSWORD</span>
            <span className=" divContent">+++++++++</span>
          </div>
        </div>
      </div>
    )
}

export default PersonalInfo