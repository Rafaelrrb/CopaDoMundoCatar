import { Link } from "react-router-dom";

export function Navbar(){
  return (
    <div className='navbar'>
      <ul className='list'>
        <li><Link to="/">Times</Link></li>
        <li><Link to="/clashes">Partidas</Link></li>
      </ul>
    </div>
  )
}