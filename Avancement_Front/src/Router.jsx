import { RouterProvider, createBrowserRouter, Outlet } from "react-router-dom";
import NavBar from "./Components/NavBar";
import AvencementParModule from "./Components/AvencementParModule";
import DataUpload from "./Components/DataUpload";
import './CSS/Layout.css'
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
      { path: "DataUpload", element: <DataUpload /> },
    ],
  },
]);

export default function Router() {
  return <RouterProvider router={router} />;
}

