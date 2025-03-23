---
title: "Space Weather Simulations"
excerpt: "Successive Interacting Coronal Mass Ejections: How to Create a Perfect Solar Storm?"
coverImage: "/assets/blog/phaethon/phaethon.gif"
date: "2021-09-16T05:35:07.322Z"
author:
  name: Gordon J. Köhn
  picture: "/assets/blog/authors/gjk.jpeg"
ogImage:
  url: "/assets/blog/phaethon/CME_pic.jpg"
---

# Space Weather Simulations

## Successive Interacting Coronal Mass Ejections:  
How to Create a Perfect Solar Storm?

Working Period: Mar 2021 - Sep 2021

*Master Thesis & Publication with Imperial College London during my MSc Physics with Dr. Ravindra Desai.*

*Recall the May 10-11 2024 Aurora around the globe - here is the explanation why that solar storm was so strong!*

### Abstract:

**A highly computationally parallelized 3D magnetohydrodynamic parametric study using linear force-free spheromaks to simulate coronal mass ejections propagating through the inner heliosphere, to assess their effect on the space weather at Earth.**

### Publication

We discovered that the chirality of successive CMEs matters!  
[**Successive Interacting Coronal Mass Ejections: How to Create a Perfect Storm**](https://iopscience.iop.org/article/10.3847/1538-4357/aca28c/meta), *Astrophysical Journal, Koehn et al. 2022*  
Also, some media coverage explaining it nicely:  
[**Creating a perfect storm**](https://aasnova.org/2023/02/01/creating-a-perfect-solar-storm/), *American Astronomical Society*

Find the [**Full thesis Report**](/assets/reports/MScPhysics_Project_Imperial_GordonJulianKoehn_01412124.pdf) here.

In plain English, the sun may look calm in the sky, but in reality, violent masses of plasma are thrown around by fusion heat and unimaginably strong magnetic fields. Every now and then, magnetic field lines twist in such a way, building up tension, that a bulk of plasma is violently accelerated away. A **Coronal Mass Ejection** happens, and they look as marvelous as this:

![CME Picture](/assets/blog/phaethon/CME_pic.jpg)

These huge blobs of plasma freeze in a part of the magnetic field of the sun. If these blobs of plasma, then called interplanetary coronal mass ejections (ICME), travel towards Earth, they can become seriously threatening to our infrastructure. When the ICME hits the Earth's magnetosphere, the Earth's magnetic field can strongly deform. Sometimes, so strongly that tension on magnetic field lines builds up and violently snaps back. This is what we call a geomagnetic storm.

The moving magnetic fields induce current and, through a few inductions, even in our human long-range power lines. This has already led to major power outages - see Hydro-Quebec Power grid failure. Yet the real threat is not a single CME but two CMEs combining on the way to Earth. This may lead to a geomagnetic storm stronger than anything our electrified society has seen so far. In 1859, such a storm hit Earth. On that day, the aurora was visible down to Mexico and Cuba. The few long-range electrical devices, namely telegraphs, went wild, electrocuting people. It is thought that a storm of this strength, happening today, would knock out the entire power grid of the sunlit side of Earth. - The event is called the Carrington Event. So far, no sufficient emergency measures are implemented. The only thing we could do is to just switch all long-range power grids off, within less than 24h. Good luck, governments of Earth.

### What I did:

In my thesis, I modeled how these CMEs travel from the surface of the Sun to Earth. We initialize the storms from satellite observations and a novel model that is supposed to approximate the internal structure of CMEs well enough whilst being feasible to compute with the best computers available to academia today. The idea was to have two CMEs colliding and find the worst case for Earth.

The really novel insight we gained is that it matters how the magnetic field lines of the two CMEs are twisting - chirality - with respect to each other. This can have a massive effect on the impact on Earth. Imagine the magnetic fields of the Sun and the two CMEs traveling to Earth as three swirls as you observe in a bathtub. These swirls each represent the magnetic fields of the Sun and CMEs in the equatorial plane of our solar system. Now imagine that the swirls of the CMEs can be counter or with the swirl of the Sun and counter to each other.

Now back to geomagnetic storms. Imagine the CME swirls combine and move outward. In what combination or swirl orientations do they create the largest swirl at Earth still? Thinking about water in this way, it is not far to think that if the CMEs vortex with the Sun and each other, it leads to the largest swirl surviving at Earth. And indeed, that's what is true in the world of magneto-hydrodynamics of CMEs. See this terribly wrong but instructive sketch:

![Sketch](/assets/blog/phaethon/sketch.png)
