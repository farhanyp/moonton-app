export default function InputLabel({ value, forInput, className = '', children }) {
    return (
        <label  htmlFor={forInput} className={`text-base block mb-2` + className}>
            {value ? value : children}
        </label>
    );
}
