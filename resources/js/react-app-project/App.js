import React from 'react';
import { BrowserRouter as Router, Route, Switch } from "react-router-dom";
import CssBaseline from '@material-ui/core/CssBaseline';
import About from './pages/about/About';
import Build from './pages/build/Build';
import Buy from './pages/buy/Buy';
import Home from './pages/home/Home';
import Login from './pages/login/Login';
import Profile from './pages/profile/Profile';
import ProtectedRoute from './components/protectedRoute/ProtectedRoute';
import Sell from './pages/sell/Sell';

/* Anything that has register is temporary */
import Register from './pages/register/Register';
import CreateAccount from './pages/createAccount/CreateAccount';



const App = () => {
    return (
        <React.Fragment>
            <CssBaseline />
            <Router>
                <Switch>
                    <Route exact path='/' component={Home} />
                    <Route exact path='/sell' component={Sell} />
                    <Route exact path='/buy' component={Buy} />
                    <Route exact path='/build' component={Build} />
                    <Route exact path='/about' component={About} />
                    <ProtectedRoute exact path='/profile' component={Profile} />
                    <Route exact path='/create-account' component={CreateAccount} />
                    <Route exact path='/login' component={Login} />

                    <Route exact path='/register' component={Register} />

                    <Route path='*' component={()=> '404 NOT FOUND'} />
                </Switch>
            </Router>
        </React.Fragment>
    );
};

export default App;