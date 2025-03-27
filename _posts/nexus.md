---
title: "Connectivity Inference of Neuronal Networks"
excerpt: "Towards the Brain-Computer-Interface"
coverImage: "/assets/blog/nexus/nexus.png"
date: "2022-08-19T00:00:00.000Z"
author:
    name: Gordon J. Köhn
    picture: "/assets/blog/authors/gjk.jpeg"
ogImage:
    url: "/assets/blog/nexus/nexus.png"
---

## **Connectivity Inference of Neuronal Networks**

## *Towards the Brain-Computer-Interface*

Working Period: 2022

This research project was part of my MSc Biotechnology at ETH Zürich in the Bioengineering Laboratory.

### **Abstract**

In the pursuit to comprehend the enigmatic nature of our brain, understanding operational principles of neural circuits is the main goal. The defining characteristic of any circuit is its connectivity. Yet, investigating the physical neuron to neuron connections in the living brain on a large scale is presently still infeasible. Thus, other methods to learn about the connectivity of neuronal circuits are being explored, as for instance via the neural activity. The dawn of high-density, multi-electrode implants gives hope to record large-scale neuronal activity on the single neuron level in next decades.

Given neuronal activity recordings, the functional connectivity of a network may be inferred from statistical correlation. The term functional connectivity separates the connectivity found by correlation from the physical, called structural connectivity. It may already contain the operational principles of our brain we seek to find.

Here, we evaluate the performance of a widely used functional connectivity inference method by English et al. [2017] on small scale networks. We generate neural activity in silico on a known random network structure, to then evaluate the performance of the algorithm against it.

The model used to simulate neurons is the prominent adaptive-exponential integrate and fire (aEIF) model by Brette et al. [2007], allowing to capture the fundamental exponential and adapting behaviour of the action potential.

The performance of the connectivity inference algorithm is evaluated at the extrema of synchrony of sensible network activity. Therefore an extensive parametric study in the adaption and conductance space of the used neuron model was conducted, successfully identifying regimes of a- and synchronous activity.

Particular cases of very synchronous network activity lead to a poor performance of the inference algorithm, yet this study fails to make quantitative statements aimed for.

Further, an attempt to explore network activity and performance of the algorithm at more neuro-physiological network topologies, namely scale-free networks is presented.

### **References**

[1] [English, D. F., McKenzie, S., Evans, T., Kim, K., Yoon, E., & Buzsáki, G. (2017). Pyramidal Cell-Interneuron Circuit Architecture and Dynamics in Hippocampal Networks. Neuron, 96(2), 505-520.e7.](https://doi.org/10.1016/j.neuron.2017.09.033)

[2] [Brette, R., & Gerstner, W. (2005). Adaptive exponential integrate-and-fire model as an effective description of neuronal activity. Journal of Neurophysiology, 94(5), 3637–3642.](https://doi.org/10.1152/jn.00686.2005)

### **Materials**

#### **Slides**
The presentation slides for this project are available **[here](/assets/reports/Project_Nexus_Presenation_V2.pdf)**.

#### **Report**
The final report for this semester project was completed on August 19, 2022 and is available **[here](/assets/reports/SemesterProjectReport_GordonKoehn_Final_19082022.pdf)**.

#### **Code**
The code for this project is available on GitHub: **[gordonkoehn/nexus](https://github.com/gordonkoehn/nexus)**