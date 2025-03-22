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
            src="/assets/blog/hello-world/cover.jpg"
            alt="Cover"
            fill
            style={{ objectFit: 'cover', width: '100%' }}
            className="object-cover"
          />
          {/* Profile picture overlay */}
          <div className="absolute top-4 left-4 w-56 h-56 rounded-full overflow-hidden border-4 border-white">
            <Image
              src="/assets/profile/2.png"
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
