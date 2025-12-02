<style>
    .project-item {
        transition: opacity 0.5s ease-in-out, transform 0.3s ease;
    }

    .project-hidden.opacity-100 {
        animation: fadeInUp 0.5s ease-out forwards;
    }

    @keyframes fadeInUp {
        from {
            opacity: 0;
            transform: translateY(20px);
        }

        to {
            opacity: 1;
            transform: translateY(0);
        }
    }

    @keyframes fadeIn {
        from {
            opacity: 0;
            transform: scale(0.95);
        }

        to {
            opacity: 1;
            transform: scale(1);
        }
    }

    /* ORBIT BASE */
    .orbit {
        position: absolute;
        border: 2px solid rgba(96, 165, 250, 0.6);
        /* blue-400 */
        border-radius: 50%;
        top: 50%;
        left: 50%;
        transform-origin: center;
        animation: spinOrbit 6s linear infinite;
    }

    /* ORBIT 1 – Horizontal */
    .orbit-1 {
        width: 230px;
        height: 90px;
        transform: translate(-50%, -50%) rotate(0deg);
    }

    /* ORBIT 2 – Slight Tilt */
    .orbit-2 {
        width: 230px;
        height: 90px;
        transform: translate(-50%, -50%) rotate(60deg);
        animation-duration: 7s;
    }

    /* ORBIT 3 – Opposite Tilt */
    .orbit-3 {
        width: 230px;
        height: 90px;
        transform: translate(-50%, -50%) rotate(120deg);
        animation-duration: 8s;
    }

    /* ROTATION KEYFRAME */
    @keyframes spinOrbit {
        0% {
            transform: translate(-50%, -50%) rotate(0deg);
        }

        100% {
            transform: translate(-50%, -50%) rotate(360deg);
        }
    }
</style>
