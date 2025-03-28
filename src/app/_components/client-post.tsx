'use client';

import { PostBody } from '@/app/_components/post-body';
import MathJaxScript from '@/app/_components/mathjax-script';
import { useEffect, useState, memo } from 'react';

interface ClientPostProps {
  content: string;
}

// Using memo to prevent unnecessary re-renders
const ClientPost = memo(function ClientPost({ content }: ClientPostProps) {
  const [hasMath, setHasMath] = useState(false);
  
  useEffect(() => {
    // Check if the post contains math expressions
    setHasMath(content.includes('$$') || content.includes('$'));
  }, [content]);

  return (
    <>
      <PostBody content={content} />
      {hasMath && <MathJaxScript />}
    </>
  );
});

export default ClientPost;