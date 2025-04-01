import Container from "@/app/_components/container";
import { HeroPost } from "@/app/_components/hero-post";
import { Intro } from "@/app/_components/intro";
import { MoreStories } from "@/app/_components/more-stories";
import { getAllPosts } from "@/lib/api";
import Image from 'next/image';
import Link from 'next/link';

export default function Index() {
  const allPosts = getAllPosts();
  const heroPost = allPosts[0];
  const morePosts = allPosts.slice(1);

  return (
    <main>
      <Container>
        <Intro />
        <div className="relative">
          {/* Background cover image */}
          <Image
            src="/assets/blog/my-why/cover.jpg"
            alt="Cover"
            fill
            style={{ objectFit: 'cover', width: '100%' }}
            className="object-cover"
          />
          {/* Profile picture overlay */}
          <div className="absolute top-2 sm:top-3 md:top-4 left-2 sm:left-3 md:left-4 w-24 h-24 sm:w-36 sm:h-36 md:w-48 md:h-48 lg:w-56 lg:h-56 rounded-full overflow-hidden border-2 sm:border-3 md:border-4 border-white">
            <Image
              src="/assets/blog/authors/gjk.jpeg"
              alt="Profile Picture"
              fill
              style={{ objectFit: 'cover' }}
            />
          </div>
        </div>

        <HeroPost
          title={heroPost.title}
          coverImage={heroPost.coverImage}
          date={heroPost.date}
          author={heroPost.author}
          slug={heroPost.slug}
          excerpt={heroPost.excerpt}
        />
        {morePosts.length > 0 && <MoreStories posts={morePosts} />}
        
        {/* University Resources Section - moved to bottom */}
        <section className="my-12 p-6 bg-white bg-opacity-90 rounded-lg shadow-md border border-gray-200">
          <div className="flex items-center mb-4">
            <span className="text-3xl mr-3">🎓</span>
            <h2 className="text-2xl font-bold">University Resources</h2>
          </div>
          <p className="mb-4">
            Access a comprehensive collection of resources from my university journey including problem sheets, 
            exam solutions, and study materials from UCL, Imperial College London, and ETH Zürich.
          </p>
          <div className="flex flex-wrap gap-2 mb-4">
            <span className="px-3 py-1 bg-blue-100 text-blue-800 rounded-full text-sm font-medium">UCL Physics BSc</span>
            <span className="px-3 py-1 bg-red-100 text-red-800 rounded-full text-sm font-medium">Imperial Physics MSc</span>
            <span className="px-3 py-1 bg-green-100 text-green-800 rounded-full text-sm font-medium">ETH Biotech MSc</span>
          </div>
          <Link href="/university-resources" className="inline-flex items-center px-4 py-2 bg-blue-600 hover:bg-blue-700 text-white font-semibold rounded-md transition duration-200">
            View Resources
            <svg className="ml-2 w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
              <path strokeLinecap="round" strokeLinejoin="round" strokeWidth="2" d="M9 5l7 7-7 7"></path>
            </svg>
          </Link>
        </section>
      </Container>
    </main>
  );
}
