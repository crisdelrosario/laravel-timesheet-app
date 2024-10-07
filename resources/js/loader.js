import React from 'react';
import ReactDOM from "react-dom/client";
import { BrowserRouter, Routes, Route } from 'react-router-dom';
import Home from './views/home';
import SignIn from './views/signin';
import SignUp from './views/signup';
import ErrorBoundary from './components/errors/boundary';

function App() {
    return (
        <BrowserRouter>
            <ErrorBoundary>
                <Routes>
                    <Route path="/" element={ <Home/> }></Route>
                    <Route path="/dashboard" element={ <Dashboard/> }></Route>
                    <Route path="/account" element={ <Dashboard/> }></Route>
                    <Route path="/timesheet" element={ <Dashboard/> }></Route>
                    <Route path="/expenses" element={ <Dashboard/> }></Route>
                    <Route path="/manage" element={ <Dashboard/> }></Route>
                    <Route path="/signin" element={ <SignIn/> }></Route>
                    <Route path="/signup" element={ <SignUp/> }></Route>
                </Routes>
            </ErrorBoundary>
        </BrowserRouter>
    )
}

ReactDOM.createRoot(document.getElementById("app")).render(
    <React.StrictMode>
        <App/>
    </React.StrictMode>
);