from sys import argv

def convert_line(line: str) -> str:
        if not line.strip().startswith('// '):
                return line
        
        return fr'{line.split('// ')[0]}/* {line.split('// ')[1].strip()} */' + '\n'

def main() -> None:
        with open(argv[1], 'r') as styles:
                styles: list[str] = styles.readlines()

        print(*[convert_line(line) for line in styles], sep='')

main()        
