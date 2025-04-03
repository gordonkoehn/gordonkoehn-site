/** @type {import('next').NextConfig} */
const nextConfig = {
  reactStrictMode: true,
  images: {
    domains: ['drive.google.com'],
  },
  async redirects() {
    return [
      {
        source: '/universityResources',
        destination: '/university-resources',
        permanent: true,
      },
      {
        source: '/universityResources/index.html',
        destination: '/university-resources',
        permanent: true,
      },
    ]
  },
}

module.exports = nextConfig