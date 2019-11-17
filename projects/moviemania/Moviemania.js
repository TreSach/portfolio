import React, {Component} from "react";

import {
  Route,
  Link,
  BrowserRouter,
  Switch
} from "react-router-dom";


class Moviemania extends Component {
    render() {
        return (
            <section className="projects" id="projects">
  <BrowserRouter>
  <div className="cen-text">
  <h2 className="h2 margbot-big">Projects</h2>
 
    <p>
   Click the picture below to view more details of the projects. 
    </p> 
</div>

  <div className="row">
    <div className="col-33" id="project"> 
    <div className="projects-info">
   
      <div className="wrap">
<div className="tile">
  <img src='https://images.unsplash.com/photo-1485095329183-d0797cdc5676?ixlib=rb-1.2.1&q=80&fm=jpg&crop=entropy&cs=tinysrgb&w=1600&h=900&fit=crop&ixid=eyJhcHBfaWQiOjF9' alt="Movie Theater"/>
  <div className="text">
  <h1 className="h1-pro">Movie Mania</h1>
  <h2 className="animate-text">Georgia Southern University</h2>

  <Link to="/project/moviemania" className="animate-text pulse btn-links">View Details</Link>
  </div>
 </div>

  </div>

    </div>
</div>

</div>



<div className="popup" id="popup-mm">
            <div className="popup__content">

                    <a href="#projects" className="popup__close">&times;</a>
                    <h2 className="projects-h3 margbot-small p-cen">Movie Mania</h2>

                    <p className="popup__text">
                    This is a movie review website for selected various movie titles. Users can post a movie review, rate a movie, and watch a movie trailers. The owner of the Movie Mania preferred to view a list of actresses rather than actors because of the target audience was mostly males. It includes the use of the <a href="https://tvtropes.org/pmwiki/pmwiki.php/UsefulNotes/TheBechdelTest" target="_blank" rel="noopener noreferrer" className="txt-link">Bechedel Test</a> to support the movie with leading actresses talking about the subject. Site is created and used mainly for academic purposes. Due to the site being down, it will be no longer accessible.
                    </p>
                    <a href="doc/moviemania.pdf" target="_blank" rel="noopener noreferrer" className="btn color-9 btn-link p-cen">View Doc</a>

            </div>
        </div>


        <Switch>
<Route path="/project/moviemania" component={Moviemania}/>
</Switch>
</BrowserRouter>

</section>

        );
    }
}

export default Moviemania;