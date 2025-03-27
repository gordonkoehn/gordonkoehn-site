import Container from "@/app/_components/container";
import { HeroPost } from "@/app/_components/hero-post";
import { Intro } from "@/app/_components/intro";
import { MoreStories } from "@/app/_components/more-stories";
import { getAllPosts } from "@/lib/api";
import Image from 'next/image';

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
      </Container>
    </main>
  );
}
