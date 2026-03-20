import { useTranslation } from 'react-i18next';

const languages = ['fr', 'en'] as const;

export default function LanguageSwitcher() {
    const { i18n } = useTranslation();

    return (
        <div className="flex items-center gap-1 rounded-full border border-white/10 bg-white/5 p-1 text-xs font-medium">
            {languages.map((lng) => (
                <button
                    key={lng}
                    onClick={() => i18n.changeLanguage(lng)}
                    className={`rounded-full px-3 py-1 uppercase transition-all ${
                        i18n.language === lng
                            ? 'bg-violet-500/80 text-white shadow-[0_0_8px_rgba(139,92,246,0.4)]'
                            : 'text-white/50 hover:text-white/80'
                    }`}
                >
                    {lng}
                </button>
            ))}
        </div>
    );
}
