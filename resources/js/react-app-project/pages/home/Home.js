import React, { useEffect } from 'react';
import NavBar from '../../components/navBar/NavBar';
import axios from 'axios';

const Home = (props) => {
    useEffect(() => {
    }, []);

    return (
        <div>
            <NavBar loggedIn={props.loggedIn} setLoggedIn={props.setLoggedIn} />
            <h1>Home Page</h1>
        </div>
    );
};

export default Home;