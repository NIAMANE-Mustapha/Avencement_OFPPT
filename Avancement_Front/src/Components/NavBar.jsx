import { Link } from "react-router-dom";
import "../CSS/NavBar.css";
export default function NavBar() {
    return (
        <div>
            <nav>
                <Link to="/AvencementParModule">Avancement Par Module</Link>
                <Link to="/DataUpload">Data Upload</Link>
                <Link to="/NombreEfmParGroup">Nombre Efm Par Groupe</Link>
                <Link to="/AvancementParGroup">Avancement Par Groupe</Link>
            </nav>{" "}
        </div>
    );
}
