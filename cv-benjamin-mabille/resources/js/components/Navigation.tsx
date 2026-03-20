import { useCallback, useEffect, useState } from 'react';
import { useTranslation } from 'react-i18next';
import { router, usePage } from '@inertiajs/react';
import { IconMenu2, IconX } from '@tabler/icons-react';
import LanguageSwitcher from './LanguageSwitcher';

interface NavSection {
    id: string;
    labelKey: string;
}

const sections: NavSection[] = [
    { id: 'experiences', labelKey: 'nav.experiences' },
    { id: 'education', labelKey: 'nav.education' },
    { id: 'skills', labelKey: 'nav.skills' },
    { id: 'projects', labelKey: 'nav.projects' },
    { id: 'contact', labelKey: 'nav.contact' },
];

interface Props {
    settings?: Record<string, string>;
}

export default function Navigation({ settings }: Props) {
    const { t } = useTranslation();
    const { url } = usePage();
    const isHome = url === '/';
    const isContact = url.startsWith('/contact');
    const [activeSection, setActiveSection] = useState('');
    const [mobileOpen, setMobileOpen] = useState(false);
    const [scrolled, setScrolled] = useState(false);

    const handleScroll = useCallback(() => {
        setScrolled(window.scrollY > 50);

        const offsets = sections
            .map(({ id }) => {
                const el = document.getElementById(id);
                if (!el) return null;
                return { id, top: el.getBoundingClientRect().top };
            })
            .filter(Boolean) as { id: string; top: number }[];

        const current = offsets.find((s) => s.top >= -200 && s.top < window.innerHeight / 2);
        if (current) {
            setActiveSection(current.id);
        }
    }, []);

    useEffect(() => {
        if (isContact) {
            setActiveSection('contact');
            setScrolled(true);
            return;
        }
        window.addEventListener('scroll', handleScroll, { passive: true });
        handleScroll();
        return () => window.removeEventListener('scroll', handleScroll);
    }, [handleScroll, isContact]);

    const scrollTo = (id: string) => {
        setMobileOpen(false);
        if (id === 'contact') {
            router.visit('/contact');
            return;
        }
        if (!isHome) {
            router.visit('/', {
                onSuccess: () => {
                    setTimeout(() => {
                        const el = document.getElementById(id);
                        if (el) el.scrollIntoView({ behavior: 'smooth', block: 'start' });
                    }, 100);
                },
            });
            return;
        }
        const el = document.getElementById(id);
        if (el) {
            el.scrollIntoView({ behavior: 'smooth', block: 'start' });
        }
    };

    const name = settings?.site_name ?? 'Benjamin Mabille';

    return (
        <nav
            className={`fixed top-0 right-0 left-0 z-40 transition-all duration-300 ${
                scrolled ? 'bg-black/60 shadow-lg shadow-violet-500/5 backdrop-blur-xl' : 'bg-transparent'
            }`}
        >
            <div className="mx-auto flex max-w-7xl items-center justify-between px-6 py-4">
                <button
                    onClick={() => window.scrollTo({ top: 0, behavior: 'smooth' })}
                    className="bg-gradient-to-r from-violet-400 to-cyan-400 bg-clip-text text-lg font-bold text-transparent"
                >
                    {name}
                </button>

                <ul className="hidden items-center gap-8 md:flex">
                    {sections.map(({ id, labelKey }) => (
                        <li key={id}>
                            <button
                                onClick={() => scrollTo(id)}
                                className={`relative text-sm transition-colors ${
                                    activeSection === id ? 'text-white' : 'text-white/50 hover:text-white/80'
                                }`}
                            >
                                {t(labelKey)}
                                {activeSection === id && (
                                    <span className="absolute -bottom-1 left-0 h-0.5 w-full rounded-full bg-gradient-to-r from-violet-500 to-cyan-500" />
                                )}
                            </button>
                        </li>
                    ))}
                </ul>

                <div className="hidden items-center gap-4 md:flex">
                    <LanguageSwitcher />
                </div>

                <button
                    onClick={() => setMobileOpen(!mobileOpen)}
                    className="text-white/70 hover:text-white md:hidden"
                >
                    {mobileOpen ? <IconX size={24} /> : <IconMenu2 size={24} />}
                </button>
            </div>

            {mobileOpen && (
                <div className="border-t border-white/5 bg-black/80 backdrop-blur-xl md:hidden">
                    <div className="flex flex-col gap-2 px-6 py-4">
                        {sections.map(({ id, labelKey }) => (
                            <button
                                key={id}
                                onClick={() => scrollTo(id)}
                                className={`rounded-lg px-4 py-2 text-left text-sm transition-colors ${
                                    activeSection === id
                                        ? 'bg-violet-500/10 text-white'
                                        : 'text-white/50 hover:text-white/80'
                                }`}
                            >
                                {t(labelKey)}
                            </button>
                        ))}
                        <div className="pt-2">
                            <LanguageSwitcher />
                        </div>
                    </div>
                </div>
            )}
        </nav>
    );
}
