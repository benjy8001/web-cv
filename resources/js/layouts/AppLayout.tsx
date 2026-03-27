import { type ReactNode } from 'react';
import { useTranslation } from 'react-i18next';
import { AnimatePresence, motion } from 'framer-motion';
import GrainOverlay from '@/components/GrainOverlay';
import Navigation from '@/components/Navigation';

interface Props {
    children: ReactNode;
    settings?: Record<string, string>;
}

export default function AppLayout({ children, settings }: Props) {
    const { t } = useTranslation();
    const year = new Date().getFullYear();

    return (
        <div className="relative min-h-screen bg-[#0a0a0f] text-white">
            <div
                className="pointer-events-none fixed inset-0 z-0"
                style={{
                    backgroundImage:
                        'radial-gradient(circle, rgba(255,255,255,0.04) 1px, transparent 1px)',
                    backgroundSize: '24px 24px',
                }}
            />

            <GrainOverlay />
            <Navigation settings={settings} />

            <AnimatePresence mode="wait">
                <motion.main
                    initial={{ opacity: 0, y: 12 }}
                    animate={{ opacity: 1, y: 0 }}
                    exit={{ opacity: 0, y: -12 }}
                    transition={{ duration: 0.3, ease: 'easeInOut' }}
                >
                    {children}
                </motion.main>
            </AnimatePresence>

            <footer className="relative z-10 border-t border-white/5 py-8">
                <div className="mx-auto flex max-w-7xl flex-col items-center gap-2 px-6 text-sm text-white/30">
                    <p>
                        &copy; {year} {settings?.site_name ?? 'Benjamin Mabille'}.{' '}
                        {t('footer.rights')}
                    </p>
                    <p>{t('footer.builtWith')}</p>
                </div>
            </footer>
        </div>
    );
}
