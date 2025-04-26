public class LawThree extends Laws {
    public LawThree(float force) {
        super("Third law", force, "To every action there is an equal and opposite reaction.");
    }

    @Override
    public Object calculate() {
        return this.getForce() * -1;
    }
}