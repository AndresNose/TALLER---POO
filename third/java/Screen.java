public class Screen {
    private Laws laws;
    
    public Screen (Laws laws) {
        this.laws = laws;
    }
    public Laws getLaws() {
        if (this.laws.getName().equals("First law")) {
            this.laws = new LawOne(this.laws.getForce());
        } else
        if (this.laws.getName().equals("Second law")) {
            this.laws = new LawTwo(this.laws.getForce());
        } else
        if (this.laws.getName().equals("Third law")) {
            this.laws = new LawThree(this.laws.getForce());
        }
        return this.laws;
    }
    public static void main(String[] args) {
        Laws laws = new LawTwo(25);
        Screen screen = new Screen(laws);

        Laws law = screen.getLaws();

        System.out.println("Name: " + law.getName());
        System.out.println("Force: " + law.getForce());
        System.out.println("Description:  " + law.getDescription());
        System.out.println(law.calculate());
    }
}