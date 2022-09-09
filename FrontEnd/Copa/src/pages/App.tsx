
import { Routes,Route} from 'react-router-dom';

import { Team } from './Team';
import {Clashes} from './Clashes';
import {Navbar} from '../components/Navbar';
import { Players } from '../components/Players';
import { Footer } from '../components/Footer';

export function App() {
  return (
    <>
      <Navbar/>
      <Routes>
        <Route path='/' element={<Team/>}/> 
          
        <Route path='/clashes' element={<Clashes/>}/>
        
        <Route path="" element={<h1>Not found</h1>}/>
      </Routes>
      <Footer/>
    </>
      
  )
}

