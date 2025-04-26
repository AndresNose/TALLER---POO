public class LawOne extends Laws {
    public LawOne(float force) {
        super("First law", force, "If force = 0, the object maintains its state.");
    }

    @Override
    public Object calculate() {
        return (getForce() == 0) ? "The object maintains its state." : "The object does not maintain its state.";
    }
}