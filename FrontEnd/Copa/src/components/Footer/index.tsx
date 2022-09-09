import { FaFacebook,FaInstagram, FaLinkedin } from 'react-icons/fa';

export function Footer(){
  return(
    <footer className='footer'>
      <ul className='list-footer'>
        <li><FaFacebook/></li>
        <li><FaInstagram/></li>
        <li><FaLinkedin/></li>
      </ul>
    </footer>
  )
}