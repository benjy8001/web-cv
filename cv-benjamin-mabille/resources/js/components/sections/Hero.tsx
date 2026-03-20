import { useMemo } from 'react';
import { useTranslation } from 'react-i18next';
import { motion } from 'framer-motion';
import { IconChevronDown } from '@tabler/icons-react';
import { TypeAnimation } from 'react-type-animation';
import type { Settings } from '@/types/cv';

interface Props {
    settings: Settings;
}

export default function Hero({ settings }: Props) {
    const { t, i18n } = useTranslation();

    const isAvailable = settings.is_available === '1' || settings.is_available === 'true';

    const roles = useMemo(() => {
        try {
            const parsed = JSON.parse(settings.title ?? '{}');
            const lang = i18n.language as 'fr' | 'en';
            const value = Array.isArray(parsed) ? parsed : (parsed[lang] ?? parsed.fr ?? settings.title);
            const list: string[] = Array.isArray(value) ? value : [value];
            return list.flatMap((role) => [role, 2000]);
        } catch {
            return [settings.title ?? 'Développeur Full Stack', 2000];
        }
    }, [settings.title, i18n.language]);

    return (
        <section className="relative flex min-h-screen items-center justify-center overflow-hidden px-6">
            <div className="pointer-events-none absolute inset-0">
                <div className="absolute top-1/4 -left-32 h-96 w-96 rounded-full bg-violet-500/10 blur-[120px]" />
                <div className="absolute top-1/3 -right-32 h-96 w-96 rounded-full bg-cyan-500/10 blur-[120px]" />
                <div className="absolute bottom-1/4 left-1/2 h-64 w-64 -translate-x-1/2 rounded-full bg-magenta-500/10 blur-[120px]" />
            </div>

            <div className="relative z-10 text-center">
                <motion.h1
                    initial={{ opacity: 0, y: 30 }}
                    animate={{ opacity: 1, y: 0 }}
                    transition={{ duration: 0.8, ease: 'easeOut' }}
                    className="mb-6 text-5xl font-bold tracking-tight sm:text-7xl lg:text-8xl"
                >
                    <span className="animate-gradient bg-gradient-to-r from-violet-400 via-cyan-400 to-pink-400 bg-[length:200%_auto] bg-clip-text text-transparent">
                        Benjamin Mabille
                    </span>
                </motion.h1>

                <motion.div
                    initial={{ opacity: 0, y: 20 }}
                    animate={{ opacity: 1, y: 0 }}
                    transition={{ duration: 0.8, delay: 0.3, ease: 'easeOut' }}
                    className="mb-8 h-8 text-lg text-white/60 sm:text-xl"
                >
                    <TypeAnimation
                        sequence={roles}
                        wrapper="span"
                        speed={50}
                        repeat={Infinity}
                        cursor={true}
                    />
                </motion.div>

                <motion.div
                    initial={{ opacity: 0, scale: 0.9 }}
                    animate={{ opacity: 1, scale: 1 }}
                    transition={{ duration: 0.5, delay: 0.6 }}
                >
                    <span
                        className={`inline-flex items-center gap-2 rounded-full border px-4 py-2 text-sm ${
                            isAvailable
                                ? 'border-green-500/30 bg-green-500/10 text-green-400'
                                : 'border-red-500/30 bg-red-500/10 text-red-400'
                        }`}
                    >
                        <span
                            className={`h-2 w-2 rounded-full ${
                                isAvailable ? 'animate-pulse bg-green-400' : 'bg-red-400'
                            }`}
                        />
                        {isAvailable ? t('hero.available') : t('hero.unavailable')}
                    </span>
                </motion.div>
            </div>

            <motion.div
                initial={{ opacity: 0 }}
                animate={{ opacity: 1 }}
                transition={{ delay: 1.2, duration: 0.8 }}
                className="absolute bottom-8 left-1/2 -translate-x-1/2"
            >
                <motion.div
                    animate={{ y: [0, 8, 0] }}
                    transition={{ duration: 1.5, repeat: Infinity, ease: 'easeInOut' }}
                    className="flex flex-col items-center gap-2 text-white/30"
                >
                    <span className="text-xs">{t('hero.scroll')}</span>
                    <IconChevronDown size={20} />
                </motion.div>
            </motion.div>
        </section>
    );
}
