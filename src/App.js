import MainPage from "./Components/MainPage/MainPage";
import {BrowserRouter, Route, Routes} from "react-router-dom";
import Header from "./Components/Header/Header";


const App = (props) => {
  return (
      <BrowserRouter>
        <div className="main-content">
          <Header></Header>
          <div className="clearfix"></div>

          <div className="inner_content">
            <Routes>
              <Route exact path="/homepage" element={<MainPage/>}/>
              <Route exact path="/" element={<MainPage/>}/>
              <Route exact path="/firmOverview" element={<MainPage />}/>
              <Route exact path="/archil" element={<MainPage/>}/>
              <Route exact path="/services/" element={<MainPage/>}/>
              <Route exact path="/immigration" element={<MainPage/>}/>
              <Route exact path="/individuals" element={<MainPage/>} />
              <Route exact path="/business" element={<MainPage/>} />
              <Route exact path="/estate" element={<MainPage/>} />
              <Route exact path="/accounting" element={<MainPage/>} />
              <Route exact path="/contact" element={<MainPage/>} />
            </Routes>
          </div>

        </div>
      </BrowserRouter>
  );
}

export default App;
