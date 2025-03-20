import { RouterProvider, createBrowserRouter, Outlet } from "react-router-dom";
import NavBar from "./Components/NavBar";
import AvencementParModule from "./Components/AvencementParModule";
import DataUpload from "./Components/DataUpload";
import './CSS/Layout.css'
import AvancementParGroup from "./Components/AvancementParGroup";
import NombreEfmParGroup from "./Components/NombreEfmParGroup";
function Layout() {
  return (
    <div className="thecontainer" >
      <NavBar />
        <Outlet />

    </div>
  );
}

const router = createBrowserRouter([
  {
    path: "/",
    element: <Layout />, // Wrap pages with Layout
    children: [
      { path: "AvencementParModule", element: <AvencementParModule /> },
      { path: "AvancementParGroup", element: <AvancementParGroup /> },
      { path: "DataUpload", element: <DataUpload /> },
      { path: "NombreEfmParGroup", element: <NombreEfmParGroup /> },
    ],
  },
]);

export default function Router() {
  return <RouterProvider router={router} />;
}

