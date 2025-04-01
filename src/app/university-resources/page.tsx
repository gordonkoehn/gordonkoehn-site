import Image from 'next/image';
import Container from "@/app/_components/container";

export default function UniversityResources() {
  return (
    <main>
      <Container>
        <section id="one">
          <div className="inner">
            <header className="mb-8">
              <h1 className="text-4xl font-bold mb-2">University Resources</h1>
              <h2 className="text-2xl font-semibold mb-1">'standing on the shoulders of giants'</h2>
              <h3 className="text-xl mb-4">BSc Physics UCL 2020, MSc Physics ICL 2021, MSc Biotech ETH 2023</h3>
            </header>
            
            <div className="relative w-full h-64 mb-4">
              <Image 
                src="/assets/university-resources/uni_resources_banner.png" 
                alt="University Resources Banner" 
                fill
                style={{ objectFit: 'cover' }}
                className="rounded-lg"
              />
            </div>
            <em>Credits for images to the respective uni societies.</em>
            
            <div className="my-6">
              <h4 className="text-xl font-bold mb-2">What</h4>
              <p>Find resources for the following university degrees:</p>
              <ul className="list-disc ml-6 mt-2">
                <li>University College London - BSc Physics, class of 2020</li>
                <li>Imperial College London - MSc Physics, class of 2021</li>
                <li>ETH Zürich - MSc Biotech, class of 2023</li>
              </ul>
            </div>
            
            <div className="my-6">
              <h4 className="text-xl font-bold mb-2">Why</h4>
              <p className="mb-4">Noone can sustain a physics degree without solutions!
                I made it through because of the ones before me.
                I am just passing on the tradition.</p>

              <p>Over the three years of my BSc at UCL I have accumulated a
                wealth of probeme sheets and foremost handwritten solution
                of past exams. I have put it all here for you.
                All of the solutions are a product of what my friends
                and me managed to do in preparation of exams.</p>

              <p className="mt-4">A very special thanks and credit to my dear friends and study group: Camilla Tacconis, Lodovico Scarpa and Maksymilian Słupski. You made it worthwhile.</p>
            </div>
            
            <div className="my-6">
              <h4 className="text-xl font-bold mb-2">How</h4>
              <p>Just download, happy to share so you may do better.</p>
              <p>
                All problem sheets, PSTs, ICAs and my handwritten solutions are available on below Google Drive for free.
              </p>
              
              <div className="my-4 p-4 border-l-4 border-blue-500 bg-blue-50 rounded-md shadow-sm">
                <div className="flex items-center mb-2">
                  <span className="text-blue-600 text-xl mr-2">☕</span>
                  <h5 className="font-semibold text-blue-800">Exam Solutions</h5>
                </div>
                <p className="mb-3 text-gray-700">
                  My Exam solutions are available for the price of a coffee via the links in the drive on my Stuvia account. 
                  This keeps the page running and me motivated to keep it maintained.
                </p>
                <a 
                  href="https://www.stuvia.com/user/gordonkoehn" 
                  target="_blank" 
                  className="inline-flex items-center px-4 py-2 bg-blue-600 hover:bg-blue-700 text-white rounded-md transition-colors duration-200"
                >
                  <span className="mr-2">Visit Stuvia</span>
                  <svg xmlns="http://www.w3.org/2000/svg" className="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path strokeLinecap="round" strokeLinejoin="round" strokeWidth={2} d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14" />
                  </svg>
                </a>
              </div>
              
              <p>
                Just browse the drive and you will find the solutions in the respective folders.
              </p>
            </div>
            
            <div className="my-8">
              <h3 className="text-2xl font-bold mb-4">University College London - BSc Physics</h3>
              <ul className="list-disc ml-6 mb-4">
                <li>Handwritten Exam Solutions of 2nd and 3rd year, 2011-2019, some 2023</li>
                <li>1-3 year Exams/PSTs/ICAs</li>
              </ul>

              <section className="bg-white bg-opacity-80 p-4 rounded-lg mb-6">
                <h5 className="text-lg font-semibold text-gray-800">Recent Contributions / New Content</h5>
                <ul className="text-gray-600 my-2">
                  <li>Nuclear and Particle Physics 2023 + Handwritten Solutions <em>[by Dermot Geelan]</em></li>
                  <li>Solid State Physics 2023 + Handwritten Solutions <em>[by Minjoo Paul Ahn]</em></li>
                  <li>Quantum Mechanics Mock 2023 + Handwritten Solutions <em>[by Mariya Boshar & Zixu Wang]</em></li>
                </ul>
                <p className="text-gray-600 my-1">
                  Have more solutions to contribute? You can upload them <a href="https://drive.google.com/drive/folders/1e2KNtZMGgPbhedIaAlO57HwHmLBied-2?usp=drive_link" target="_blank" className="text-blue-600">here</a>. Your contributions will be shown free for all, forever.
                </p>
              </section>

              <div className="w-full h-64 bg-gray-200 mb-6">
                <iframe 
                  src="https://drive.google.com/embeddedfolderview?id=1uG5jcEmPYvC1mV4FGY5LqVqDuodVNLS4#list" 
                  style={{width: '100%', height: '100%', border: 0}}
                  title="UCL Physics Google Drive"
                />
              </div>
              
              <h5 className="text-lg font-semibold mb-2">The ones before me...</h5>
              <p>In the years before there were other ones that helped me...legacy links here, some may be down</p>
              <ul className="list-disc ml-6 mb-4">
                <li><a href="http://physicsnotes.altervista.org/" target="_blank" className="text-blue-600 hover:underline">UCL PHYSICS NOTES - from unknown</a></li>
                <li><a href="https://drive.google.com/drive/folders/1ML-VIwaCVS6Wb1QWIhM9PYG0f4uzTkF0?usp=sharing" target="_blank" className="text-blue-600 hover:underline">THIRD YEAR DRIVE - from Gordon (not me)</a></li>
                <li><a href="https://drive.google.com/drive/folders/1V2Vbt2Sa6mlMY5qrfNeUfe0yTo9C34p4?usp=sharing" target="_blank" className="text-blue-600 hover:underline">All - from unknown</a></li>
                <li><a href="https://drive.google.com/drive/folders/1dPWF97_6BJekekuRuTCxvpQOZCoApPdA?usp=sharing" target="_blank" className="text-blue-600 hover:underline">Y2 Resources - from Gordon (not me)</a></li>
                <li><a href="https://drive.google.com/drive/folders/0B8-nl3J5JOUJRFN6N01QeVBFNDg?usp=sharing" target="_blank" className="text-blue-600 hover:underline">All - from tom murat</a></li>
              </ul>

              <h5 className="text-lg font-semibold mb-2">For more solutions check out..</h5>
              <p>The private Facebook Group that is passed on from year to year. - <a href="https://www.facebook.com/groups/212625946161076/about" target="blank" className="text-blue-600 hover:underline">UCL Physics Past Papers</a></p>
            </div>
            
            <div className="my-8">
              <h3 className="text-2xl font-bold mb-4">Imperial College London - MSc Physics</h3>
              <ul className="list-disc ml-6 mb-4">
                <li>Mini Project: <a href="/posts/tdse" className="text-blue-600 hover:underline">Solving the Time-dependent Schrödinger Equation</a></li>
                <li>Self-Study Report: <a target="_blank" href="/assets/reports/SelfStudyProject_Koehn_01412124_ShorsQuantumFactoringAlgorithm_FinalVersion.pdf" className="text-blue-600 hover:underline">Report on Post Quantum Cryptography</a></li>
              </ul>
              
              <div className="w-full h-48 bg-gray-200 mb-6">
                <iframe 
                  src="https://drive.google.com/embeddedfolderview?id=18WMf1B7t22CeZzkwdtCpPqG9GSNBXafU#list" 
                  style={{width: '100%', height: '100%', border: 0}}
                  title="Imperial College Google Drive"
                />
              </div>
            </div>
            
            <div className="my-8">
              <h3 className="text-2xl font-bold mb-4">ETH Zürich - MSc Biotechnology</h3>
              <div className="w-full h-64 bg-gray-200">
                <iframe 
                  src="https://drive.google.com/embeddedfolderview?id=1eMNzFmlSgSNBPvXej_VgkF1todc27LuS#list" 
                  style={{width: '100%', height: '100%', border: 0}}
                  title="ETH Zurich Google Drive"
                />
              </div>
            </div>
            
            <div className="my-10">
              <section className="border-t border-gray-300 pt-8">
                <div className="bg-white bg-opacity-90 p-6 rounded-lg shadow-md">
                  <div className="flex items-center mb-4">
                    <span className="text-2xl mr-2">💰</span>
                    <h3 className="text-xl font-bold">Support this page</h3>
                  </div>
                  <p className="mb-4">Even a small amount can make a big impact!</p>
                  
                  <form action="https://www.paypal.com/donate" method="post" target="_top" className="mb-6">
                    <input type="hidden" name="campaign_id" value="PL2KYCACH84VW" />
                    <div className="flex items-center">
                      <input type="image" src="https://www.paypalobjects.com/en_US/i/btn/btn_donate_LG.gif" border="0" name="submit" title="PayPal - The safer, easier way to pay online!" alt="Donate with PayPal button" />
                      <b className="ml-2">with PayPal</b>
                    </div>
                  </form>
                  
                  <p>Or donate directly via Crypto (Bitcoin, Ethereum, Solana, Tether, Polygon):</p>
                  <p>web3 domain resolving to wallet addresses: <a target="_blank" href="#" className="text-blue-600 hover:underline">gordonkoehn.x</a></p>
                  <button className="bg-blue-600 hover:bg-blue-700 text-white font-semibold py-2 px-4 rounded flex items-center mt-2">
                    Donate via crypto <code className="mx-2">gordonkoehn.x</code> <svg className="h-4 w-4 ml-1" viewBox="0 0 20 20" fill="currentColor"><path d="M10 12a2 2 0 100-4 2 2 0 000 4z" /><path fillRule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm0-2a6 6 0 110-12 6 6 0 010 12z" clipRule="evenodd" /></svg>
                  </button>
                </div>
              </section>
            </div>
            
            <div className="my-10">
              <section className="border-t border-gray-300 pt-8">
                <div className="bg-white bg-opacity-90 p-6 rounded-lg shadow-md">
                  <div className="flex items-center mb-4">
                    <span className="text-2xl mr-2">🎓</span>
                    <h3 className="text-xl font-bold">Book Tutoring, Study Advice or Uni Application Review - with me.</h3>
                  </div>
                  
                  <p className="mb-4">
                    Arriving, or even applying, to University can be daunting at times. 
                    I arrived way behind, ill-prepared for UCL and Imperial's healthy yet harsh competition.
                  </p>
                  
                  <p className="mb-4">
                    The resources above already give you a head start. 
                    Schedule an hour with me if you want an unfair advantage. 
                  </p>
                  
                  <p className="mb-2">I am happy to assist with the following:</p>
                  <ul className="list-disc ml-6 mb-4">
                    <li>personal tutoring - solving exercises with you</li> 
                    <li>battle proven advice in exam strategy and preparation</li> 
                    <li>review of postgraduate study applications</li> 
                  </ul>
                  
                  <p className="mb-4">
                    My hourly rate is 50 GBP. 
                    Reach out under <a href="mailto:gordon@koehn.net?subject=Let's get together - g15n&body=Happy to skip the chit-chat. ;) " className="text-blue-600 hover:underline">gordon@koehn.net</a> to discuss.
                  </p>
                  
                  <p>
                    If you just want to reminisce about UCL, ICL and ETH Zürich, call (free of charge).
                    I'm happy to chat and form a network of bright minds any day!
                  </p>
                </div>
              </section>
            </div>
          </div>
        </section>
      </Container>
    </main>
  );
}