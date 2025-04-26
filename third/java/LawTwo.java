public class LawTwo extends Laws {
    private float bulk;
    private float acceleration;

    public LawTwo(float force) {
        super("Second law", force, "Force = Bulk * Acceleration");
    }

    public float getBulk() {
        return this.bulk;
    }

    public float getAcceleration() {
        return this.acceleration;
    }

    @Override
    public Object calculate() {
        return this.getForce() + " = " + this.getBulk() + " * " + this.getAcceleration();
    }
}