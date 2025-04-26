public abstract class Laws {
    private String name;
    private float force;
    private String description;

    public Laws(String name, float force, String description) {
        this.name = name;
        this.force = force;
        this.description = description;
    }

    public String getName() {
        return name;
    }

    public float getForce() {
        return force;
    }

    public String getDescription() {
        return description;
    }

    public abstract Object calculate();
}
