import Container from "@/app/_components/container";
import { EXAMPLE_PATH } from "@/lib/constants";
import { FaTwitter, FaFacebook, FaInstagram, FaGithub, FaLinkedin } from 'react-icons/fa';

export function Footer() {
  return (
    <footer className="bg-neutral-50 border-t border-neutral-200 dark:bg-slate-800 py-8">
      <Container>
        <div className="container mx-auto text-center">
          <p>Basel, Switzerland</p>
          <p>
            <a href="mailto:gordon@koehn.net?subject=Let's%20get%20together%20-%20g15n&body=Happy%20to%20skip%20the%20chit-chat.%20;))" className="underline">
              gordon@koehn.net
            </a>
          </p>
          <div className="flex justify-center space-x-4 mt-4">
            <a href="https://twitter.com/gordon_koehn" target="_blank" rel="noopener noreferrer">
              <FaTwitter size={24} />
            </a>
            <a href="https://www.facebook.com/gordon.kohn.9" target="_blank" rel="noopener noreferrer">
              <FaFacebook size={24} />
            </a>
            <a href="https://www.instagram.com/gordonkoehn/" target="_blank" rel="noopener noreferrer">
              <FaInstagram size={24} />
            </a>
            <a href="https://github.com/gordonkoehn" target="_blank" rel="noopener noreferrer">
              <FaGithub size={24} />
            </a>
            <a href="https://www.linkedin.com/in/gordonkoehn/" target="_blank" rel="noopener noreferrer">
              <FaLinkedin size={24} />
            </a>
          </div>
        </div>
      </Container>
    </footer>
  );
}

export default Footer;
